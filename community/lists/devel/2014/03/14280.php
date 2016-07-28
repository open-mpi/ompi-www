<?
$subject_val = "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:12:08 2014" -->
<!-- isoreceived="20140303171208" -->
<!-- sent="Mon, 3 Mar 2014 17:12:06 +0000" -->
<!-- isosent="20140303171206" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A87167F_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140303170408.GX10516_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 12:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>In reply to:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good to me.
<br>
<p>-Nathan
<br>
<p>On Monday, March 03, 2014 10:04 AM, devel [devel-bounces_at_[hidden]] on behalf of Adrian Reber [adrian_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] mca_base_component_distill_checkpoint_ready   variable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 21, 2014 at 10:12:54AM -0700, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Feb 21, 2014 at 05:21:10PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; There is a variable in the FT code which is not defined and therefore
</span><br>
<span class="quotelev3">&gt;&gt; &gt; currently #ifdef'd out.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     /* FIXME_FT
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      * the variable mca_base_component_distill_checkpoint_ready
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      * was removed by commit 8181c8273c486bba59b3dead324939eac1a58b8c (r28237)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      * &quot;Introduce the MCA framework system. This formalizes the interface frameworks must provide.&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      *
</span><br>
<span class="quotelev3">&gt;&gt; &gt;      * */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev3">&gt;&gt; &gt;         open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;     }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The variable 'mca_base_component_distill_checkpoint_ready' used to exist but was removed
</span><br>
<span class="quotelev3">&gt;&gt; &gt; with commit 'r28237':
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    {
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        int param_id = -1;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        int param_val = 0;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        /*
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -         * Extract supported mca parameters for selection contraints
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -         * Supported Options:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -         *   - mca_base_component_distill_checkpoint_ready = Checkpoint Ready
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -         */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        param_id = mca_base_param_reg_int_name(&quot;mca&quot;, &quot;base_component_distill_checkpoint_ready&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                                               &quot;Distill only those components that are Checkpoint Ready&quot;,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                                               false, false,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -                                               0, &amp;param_val);
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        if( 0 != param_val ) { /* Select Checkpoint Ready */
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -            open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -        }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -    }
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -#endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The variable is defined in contrib/amca-param-sets/ft-enable-cr
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mca_base_component_distill_checkpoint_ready=1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Looking at the name of other variable I would say it should be called
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; opal_base_distill_checkpoint_ready
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; and probably created with mca_base_var_register() or mca_base_component_var_register().
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What would be the best place to create the variable so that it can be used again in
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the FT code?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some variables are registered in opal/runtime/opal_params.c. That might
</span><br>
<span class="quotelev2">&gt;&gt; be a good place to add it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I added in that file. What do you think of following patch:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=a9808e2c4bc8888765963796eb35878a2e238377">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=a9808e2c4bc8888765963796eb35878a2e238377</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 Adrian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14281.php">Josh Hursey: "Re: [OMPI devel] Fix compiler warnings in FT code"</a>
<li><strong>Previous message:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>In reply to:</strong> <a href="14278.php">Adrian Reber: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
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
