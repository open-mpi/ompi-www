<?
$subject_val = "[OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 21 09:23:55 2014" -->
<!-- isoreceived="20140221142355" -->
<!-- sent="Fri, 21 Feb 2014 15:23:55 +0100" -->
<!-- isosent="20140221142355" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c" -->
<!-- id="20140221142355.GD30628_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-21 09:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14207.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14205.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Reply:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To restart a process using orte-restart I need sstore initialized when
<br>
running as a tool. This is currently missing. The new code is
<br>
<p>#if OPAL_ENABLE_FT_CR == 1
<br>
<p>and should only affect --with-ft builds. The following is the change I
<br>
want to make:
<br>
<p>diff --git a/orte/mca/ess/base/ess_base_std_tool.c b/orte/mca/ess/base/ess_base_std_tool.c
<br>
index 93aed89..b102e6d 100644
<br>
--- a/orte/mca/ess/base/ess_base_std_tool.c
<br>
+++ b/orte/mca/ess/base/ess_base_std_tool.c
<br>
@@ -43,6 +43,7 @@
<br>
&nbsp;#include &quot;orte/mca/state/base/base.h&quot;
<br>
&nbsp;#if OPAL_ENABLE_FT_CR == 1
<br>
&nbsp;#include &quot;orte/mca/snapc/base/base.h&quot;
<br>
+#include &quot;orte/mca/sstore/base/base.h&quot;
<br>
&nbsp;#endif
<br>
&nbsp;#include &quot;orte/util/proc_info.h&quot;
<br>
&nbsp;#include &quot;orte/util/session_dir.h&quot;
<br>
@@ -175,11 +176,22 @@ int orte_ess_base_tool_setup(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_open&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    if (ORTE_SUCCESS != (ret = mca_base_framework_open(&amp;orte_sstore_base_framework, 0))) {
<br>
+        ORTE_ERROR_LOG(ret);
<br>
+        error = &quot;orte_sstore_base_open&quot;;
<br>
+        goto error;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = orte_snapc_base_select(ORTE_PROC_IS_HNP, ORTE_PROC_IS_APP))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;error = &quot;orte_snapc_base_select&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto error;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
+    if (ORTE_SUCCESS != (ret = orte_sstore_base_select())) {
<br>
+        ORTE_ERROR_LOG(ret);
<br>
+        error = &quot;orte_sstore_base_select&quot;;
<br>
+        goto error;
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Tools do not need all the OPAL CR stuff */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_cr_set_enabled(false);
<br>
@@ -201,6 +213,7 @@ int orte_ess_base_tool_finalize(void)
<br>
&nbsp;
<br>
&nbsp;#if OPAL_ENABLE_FT_CR == 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_base_framework_close(&amp;orte_snapc_base_framework);
<br>
+    mca_base_framework_close(&amp;orte_sstore_base_framework);
<br>
&nbsp;#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if I am a tool, then all I will have done is
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14207.php">Ralph Castain: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<li><strong>Previous message:</strong> <a href="14205.php">Suraj Prabhakaran: "Re: [OMPI devel] MPI_Comm_spawn under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
<li><strong>Reply:</strong> <a href="14208.php">Ralph Castain: "Re: [OMPI devel] startup sstore orte/mca/ess/base/ess_base_std_tool.c"</a>
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
