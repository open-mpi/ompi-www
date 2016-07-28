<?
$subject_val = "[OMPI devel] mca_base_component_distill_checkpoint_ready variable";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 11:21:11 2014" -->
<!-- isoreceived="20140221162111" -->
<!-- sent="Fri, 21 Feb 2014 17:21:10 +0100" -->
<!-- isosent="20140221162110" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_base_component_distill_checkpoint_ready variable" -->
<!-- id="20140221162110.GE30628_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] mca_base_component_distill_checkpoint_ready variable<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 11:21:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Reply:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a variable in the FT code which is not defined and therefore
<br>
currently #ifdef'd out.
<br>
<p>#if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
<br>
#ifdef ENABLE_FT_FIXED
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* FIXME_FT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* the variable mca_base_component_distill_checkpoint_ready
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* was removed by commit 8181c8273c486bba59b3dead324939eac1a58b8c (r28237)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* &quot;Introduce the MCA framework system. This formalizes the interface frameworks must provide.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mca_base_component_distill_checkpoint_ready) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif /* ENABLE_FT_FIXED */
<br>
#endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
<br>
<p><p>The variable 'mca_base_component_distill_checkpoint_ready' used to exist but was removed
<br>
with commit 'r28237':
<br>
<p>-#if (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1)
<br>
-    {
<br>
-        int param_id = -1;
<br>
-        int param_val = 0;
<br>
-        /*
<br>
-         * Extract supported mca parameters for selection contraints
<br>
-         * Supported Options:
<br>
-         *   - mca_base_component_distill_checkpoint_ready = Checkpoint Ready
<br>
-         */
<br>
-        param_id = mca_base_param_reg_int_name(&quot;mca&quot;, &quot;base_component_distill_checkpoint_ready&quot;,
<br>
-                                               &quot;Distill only those components that are Checkpoint Ready&quot;, 
<br>
-                                               false, false,
<br>
-                                               0, &amp;param_val);
<br>
-        if( 0 != param_val ) { /* Select Checkpoint Ready */
<br>
-            open_only_flags |= MCA_BASE_METADATA_PARAM_CHECKPOINT;
<br>
-        }
<br>
-    }
<br>
-#endif  /* (OPAL_ENABLE_FT == 1) &amp;&amp; (OPAL_ENABLE_FT_CR == 1) */
<br>
<p>The variable is defined in contrib/amca-param-sets/ft-enable-cr
<br>
<p>mca_base_component_distill_checkpoint_ready=1
<br>
<p>Looking at the name of other variable I would say it should be called
<br>
<p>opal_base_distill_checkpoint_ready
<br>
<p>and probably created with mca_base_var_register() or mca_base_component_var_register().
<br>
<p>What would be the best place to create the variable so that it can be used again in
<br>
the FT code?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Reply:</strong> <a href="14210.php">Nathan Hjelm: "Re: [OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
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
