<?
$subject_val = "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 11:18:10 2014" -->
<!-- isoreceived="20140123161810" -->
<!-- sent="Thu, 23 Jan 2014 08:17:24 -0800" -->
<!-- isosent="20140123161724" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP" -->
<!-- id="E9B59CC0-7CD0-4670-AA86-021013AB54FA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140123151054.GM30959_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 11:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>In reply to:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Reply:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure - no issues with me
<br>
<p><p>On Jan 23, 2014, at 7:10 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Selecting SNAPC requires the information if it is an app or not:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int orte_snapc_base_select(bool seed, bool app);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following patch uses the correct define. Can I commit it like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; t a/orte/mca/ess/base/ess_base_std_app.c b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; index dbbb2f4..f3a38f0 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; @@ -252,7 +252,7 @@ int orte_ess_base_app_setup(bool db_restrict_local)
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/ess/base/ess_base_std_tool.c b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; index 98c1685..7fcf83d 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; @@ -189,7 +189,7 @@ int orte_ess_base_tool_setup(void)
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt; diff --git a/orte/mca/ess/hnp/ess_hnp_module.c b/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; index a6f1777..ea444c4 100644
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; @@ -678,7 +678,7 @@ static int rte_init(void)
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev1">&gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev1">&gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev1">&gt;         goto error;
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
<li><strong>Next message:</strong> <a href="13882.php">Ralph Castain: "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13880.php">Ralph Castain: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>In reply to:</strong> <a href="13876.php">Adrian Reber: "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Reply:</strong> <a href="13884.php">Josh Hursey: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
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
