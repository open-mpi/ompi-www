<?
$subject_val = "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 12:28:14 2014" -->
<!-- isoreceived="20140123172814" -->
<!-- sent="Thu, 23 Jan 2014 11:28:13 -0600" -->
<!-- isosent="20140123172813" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP" -->
<!-- id="CAANzjEkRtZN8OunEnECi_8hrHDTZf-LY9tvHR_C4DOVyBLayZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E9B59CC0-7CD0-4670-AA86-021013AB54FA_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 12:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>In reply to:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That should be ok.
<br>
<p><p>On Thu, Jan 23, 2014 at 10:17 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sure - no issues with me
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2014, at 7:10 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Selecting SNAPC requires the information if it is an app or not:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int orte_snapc_base_select(bool seed, bool app);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following patch uses the correct define. Can I commit it like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; t a/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt; &gt; index dbbb2f4..f3a38f0 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/ess/base/ess_base_std_app.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -252,7 +252,7 @@ int orte_ess_base_app_setup(bool db_restrict_local)
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; index 98c1685..7fcf83d 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/ess/base/ess_base_std_tool.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -189,7 +189,7 @@ int orte_ess_base_tool_setup(void)
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_open&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev1">&gt; b/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt; &gt; index a6f1777..ea444c4 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -678,7 +678,7 @@ static int rte_init(void)
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_sstore_base_open&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; -    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; !ORTE_PROC_IS_DAEMON))) {
</span><br>
<span class="quotelev2">&gt; &gt; +    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP,
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_IS_APP))) {
</span><br>
<span class="quotelev2">&gt; &gt;         ORTE_ERROR_LOG(ret);
</span><br>
<span class="quotelev2">&gt; &gt;         error = &quot;orte_snapc_base_select&quot;;
</span><br>
<span class="quotelev2">&gt; &gt;         goto error;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13884/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13885.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13883.php">Josh Hursey: "Re: [OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>In reply to:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
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
