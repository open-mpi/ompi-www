<?
$subject_val = "[OMPI devel] C/R and orte_oob";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 11:15:01 2014" -->
<!-- isoreceived="20140206161501" -->
<!-- sent="Thu, 6 Feb 2014 17:15:00 +0100" -->
<!-- isosent="20140206161500" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] C/R and orte_oob" -->
<!-- id="20140206161500.GV4981_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] C/R and orte_oob<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 11:15:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14002.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="14000.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I initially made the C/R code compile again I made following
<br>
change:
<br>
<p>diff --git a/orte/mca/rml/oob/rml_oob_component.c b/orte/mca/rml/oob/rml_oob_component.c
<br>
index f0b22fc..90ed086 100644
<br>
--- a/orte/mca/rml/oob/rml_oob_component.c
<br>
+++ b/orte/mca/rml/oob/rml_oob_component.c
<br>
@@ -185,8 +185,7 @@ orte_rml_oob_ft_event(int state) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
-    if( ORTE_SUCCESS != 
<br>
-        (ret = orte_oob.ft_event(state)) ) {
<br>
+    if( ORTE_SUCCESS != (ret = orte_rml_oob_ft_event(state)) ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ret);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit_status = ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
<p><p><p>This is, of course, wrong. Now the function calls itself in a loop until
<br>
it crashes. Looking at orte/mca/oob there is still a ft_event()
<br>
function, but it is disabled using &quot;#if 0&quot;. Looking at other functions
<br>
it seems I would need to create something like
<br>
<p>#define ORTE_OOB_FT_EVENT(m)
<br>
<p>Looking at the modules in orte/mca/oob/ it seems ft_event is implemented
<br>
in some places but it never seems to have any real functionality. Is
<br>
ft_event() actually needed there?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14002.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<li><strong>Previous message:</strong> <a href="14000.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r30571 - trunk/ompi/runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
<li><strong>Reply:</strong> <a href="14009.php">Ralph Castain: "Re: [OMPI devel] C/R and orte_oob"</a>
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
