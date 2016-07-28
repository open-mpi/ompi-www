<?
$subject_val = "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:04:09 2014" -->
<!-- isoreceived="20140303170409" -->
<!-- sent="Mon, 3 Mar 2014 18:04:08 +0100" -->
<!-- isosent="20140303170408" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable" -->
<!-- id="20140303170408.GX10516_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140221171254.GB36469_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-03 12:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Previous message:</strong> <a href="14277.php">Ralph Castain: "[OMPI devel] Change in default MCA parameter value"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>Reply:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 21, 2014 at 10:12:54AM -0700, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; On Fri, Feb 21, 2014 at 05:21:10PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev2">&gt; &gt; There is a variable in the FT code which is not defined and therefore
</span><br>
<span class="quotelev2">&gt; &gt; currently #ifdef'd out.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; #if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev2">&gt; &gt; #ifdef ENABLE_FT_FIXED
</span><br>
<span class="quotelev2">&gt; &gt;     /* FIXME_FT
</span><br>
<span class="quotelev2">&gt; &gt;      *
</span><br>
<span class="quotelev2">&gt; &gt;      * the variable mca_base_component_distill_checkpoint_ready
</span><br>
<span class="quotelev2">&gt; &gt;      * was removed by commit 8181c8273c486bba59b3dead324939eac1a58b8c (r28237)
</span><br>
<span class="quotelev2">&gt; &gt;      * &quot;Introduce the MCA framework system. This formalizes the interface frameworks must provide.&quot;
</span><br>
<span class="quotelev2">&gt; &gt;      *
</span><br>
<span class="quotelev2">&gt; &gt;      * */
</span><br>
<span class="quotelev2">&gt; &gt;     if (mca_base_component_distill_checkpoint_ready) {
</span><br>
<span class="quotelev2">&gt; &gt;         open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; #endif /* ENABLE_FT_FIXED */
</span><br>
<span class="quotelev2">&gt; &gt; #endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The variable 'mca_base_component_distill_checkpoint_ready' used to exist but was removed
</span><br>
<span class="quotelev2">&gt; &gt; with commit 'r28237':
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -#if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
</span><br>
<span class="quotelev2">&gt; &gt; -    {
</span><br>
<span class="quotelev2">&gt; &gt; -        int param_id = -1;
</span><br>
<span class="quotelev2">&gt; &gt; -        int param_val = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -        /*
</span><br>
<span class="quotelev2">&gt; &gt; -         * Extract supported mca parameters for selection contraints
</span><br>
<span class="quotelev2">&gt; &gt; -         * Supported Options:
</span><br>
<span class="quotelev2">&gt; &gt; -         *   - mca_base_component_distill_checkpoint_ready = Checkpoint Ready
</span><br>
<span class="quotelev2">&gt; &gt; -         */
</span><br>
<span class="quotelev2">&gt; &gt; -        param_id = mca_base_param_reg_int_name(&quot;mca&quot;, &quot;base_component_distill_checkpoint_ready&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; -                                               &quot;Distill only those components that are Checkpoint Ready&quot;, 
</span><br>
<span class="quotelev2">&gt; &gt; -                                               false, false,
</span><br>
<span class="quotelev2">&gt; &gt; -                                               0, &amp;param_val);
</span><br>
<span class="quotelev2">&gt; &gt; -        if( 0 != param_val ) { /* Select Checkpoint Ready */
</span><br>
<span class="quotelev2">&gt; &gt; -            open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
</span><br>
<span class="quotelev2">&gt; &gt; -        }
</span><br>
<span class="quotelev2">&gt; &gt; -    }
</span><br>
<span class="quotelev2">&gt; &gt; -#endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The variable is defined in contrib/amca-param-sets/ft-enable-cr
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca_base_component_distill_checkpoint_ready=1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the name of other variable I would say it should be called
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; opal_base_distill_checkpoint_ready
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and probably created with mca_base_var_register() or mca_base_component_var_register().
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What would be the best place to create the variable so that it can be used again in
</span><br>
<span class="quotelev2">&gt; &gt; the FT code?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some variables are registered in opal/runtime/opal_params.c. That might
</span><br>
<span class="quotelev1">&gt; be a good place to add it.
</span><br>
<p>I added in that file. What do you think of following patch:
<br>
<p><a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=a9808e2c4bc8888765963796eb35878a2e238377">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=a9808e2c4bc8888765963796eb35878a2e238377</a>
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14278/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14279.php">Hjelm, Nathan T: "Re: [OMPI devel] 1.7.5rc1 failure: unresolved pthread calls"</a>
<li><strong>Previous message:</strong> <a href="14277.php">Ralph Castain: "[OMPI devel] Change in default MCA parameter value"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/02/14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
<li><strong>Reply:</strong> <a href="14280.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready	variable"</a>
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
