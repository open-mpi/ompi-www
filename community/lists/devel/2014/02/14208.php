<?
$subject_val = "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 11:05:19 2014" -->
<!-- isoreceived="20140221160519" -->
<!-- sent="Fri, 21 Feb 2014 08:04:09 -0800" -->
<!-- isosent="20140221160409" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c" -->
<!-- id="1C210C17-3ACE-42BF-B02B-7E847BE1F867_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140221142355.GD30628_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 11:04:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14207.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14206.php">Adrian Reber: "[OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Reply:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
looks fine to me
<br>
<p><p>On Feb 21, 2014, at 6:23 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; To restart a process using orte-restart I need sstore initialized when
</span><br>
<span class="quotelev1">&gt; running as a tool. This is currently missing. The new code is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and should only affect --with-ft builds. The following is the change I
</span><br>
<span class="quotelev1">&gt; want to make:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/ess/base/ess_base_std_tool.c b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; index 93aed89..b102e6d 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; @@ -43,6 +43,7 @@
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/state/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/mca/snapc/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;orte/mca/sstore/base/base.h&quot;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/proc_info.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;orte/util/session_dir.h&quot;
</span><br>
<span class="quotelev1">&gt; @@ -175,11 +176,22 @@ int orte_ess_base_tool_setup(void)
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = mca_base_framework_open(&amp;orte_sstore_base_framework, 0))) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +        error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev1">&gt; +        goto error;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_sstore_base_select())) {
</span><br>
<span class="quotelev1">&gt; +        ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt; +        error = &quot;orte_sstore_base_select&quot;;
</span><br>
<span class="quotelev1">&gt; +        goto error;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* Tools do not need all the OPAL CR stuff */
</span><br>
<span class="quotelev1">&gt;     opal_cr_set_enabled(false);
</span><br>
<span class="quotelev1">&gt; @@ -201,6 +213,7 @@ int orte_ess_base_tool_finalize(void)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #if OPAL_ENABLE_FT_CR == 1
</span><br>
<span class="quotelev1">&gt;     mca_base_framework_close(&amp;orte_snapc_base_framework);
</span><br>
<span class="quotelev1">&gt; +    mca_base_framework_close(&amp;orte_sstore_base_framework);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* if I am a tool, then all I will have done is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="14209.php">Adrian Reber: "[OMPI devel] mca_base_component_distill_checkpoint_ready variable"</a>
<li><strong>Previous message:</strong> <a href="14207.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>In reply to:</strong> <a href="14206.php">Adrian Reber: "[OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Reply:</strong> <a href="14211.php">Josh Hursey: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
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
