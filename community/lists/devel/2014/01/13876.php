<?
$subject_val = "[OMPI devel] [PATCH] use ORTE_PROC_IS_APP";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 10:10:55 2014" -->
<!-- isoreceived="20140123151055" -->
<!-- sent="Thu, 23 Jan 2014 16:10:54 +0100" -->
<!-- isosent="20140123151054" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] [PATCH] use ORTE_PROC_IS_APP" -->
<!-- id="20140123151054.GM30959_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] [PATCH] use ORTE_PROC_IS_APP<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 10:10:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Reply:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Selecting SNAPC requires the information if it is an app or not:
<br>
<p>int orte_snapc_base_select(bool seed, bool app);
<br>
<p>The following patch uses the correct define. Can I commit it like this:
<br>
<p>t a/orte/mca/ess/base/ess_base_std_app.c b/orte/mca/ess/base/ess_base_std_app.c
<br>
index dbbb2f4..f3a38f0 100644
<br>
--- a/orte/mca/ess/base/ess_base_std_app.c
<br>
+++ b/orte/mca/ess/base/ess_base_std_app.c
<br>
@@ -252,7 +252,7 @@ int orte_ess_base_app_setup(bool db_restrict_local)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_sstore_base_open&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
<br>
+    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_select&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
diff --git a/orte/mca/ess/base/ess_base_std_tool.c b/orte/mca/ess/base/ess_base_std_tool.c
<br>
index 98c1685..7fcf83d 100644
<br>
--- a/orte/mca/ess/base/ess_base_std_tool.c
<br>
+++ b/orte/mca/ess/base/ess_base_std_tool.c
<br>
@@ -189,7 +189,7 @@ int orte_ess_base_tool_setup(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_open&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
<br>
+    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_select&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
diff --git a/orte/mca/ess/hnp/ess_hnp_module.c b/orte/mca/ess/hnp/ess_hnp_module.c
<br>
index a6f1777..ea444c4 100644
<br>
--- a/orte/mca/ess/hnp/ess_hnp_module.c
<br>
+++ b/orte/mca/ess/hnp/ess_hnp_module.c
<br>
@@ -678,7 +678,7 @@ static int rte_init(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_sstore_base_open&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON))) {
<br>
+    if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_select&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<li><strong>Previous message:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
<li><strong>Reply:</strong> <a href="13881.php">Ralph Castain: "Re: [OMPI devel] [PATCH] use ORTE_PROC_IS_APP"</a>
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
