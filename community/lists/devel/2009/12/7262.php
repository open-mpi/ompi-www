<?
$subject_val = "[OMPI devel] using hnp_always_use_plm";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 18 09:23:43 2009" -->
<!-- isoreceived="20091218142343" -->
<!-- sent="Fri, 18 Dec 2009 15:43:07 +0100" -->
<!-- isosent="20091218144307" -->
<!-- name="Damien Guinier" -->
<!-- email="damien.guinier_at_[hidden]" -->
<!-- subject="[OMPI devel] using hnp_always_use_plm" -->
<!-- id="4B2B94FB.4020207_at_ext.bull.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] using hnp_always_use_plm<br>
<strong>From:</strong> Damien Guinier (<em>damien.guinier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-18 09:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7261.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>On Openmpi, I working on a new little feature: hnp_always_use_plm.
<br>
- To create final application , mpirun use on remote &quot;orted via plm: 
<br>
Process lifecycle managment module&quot; or localy &quot;fork()&quot;. So the first 
<br>
compute node haven't the same methode than other compute node. Some 
<br>
debug tools(padb ...) and management tools (squeus -s ...) are impacted 
<br>
by this difference.
<br>
To simplify this cluster tools usage, I propose to add the possibility 
<br>
to use &quot;orted via plm&quot; on remote and localy.
<br>
<p>I make a patch to add the parameter &quot;OMPI_MCA_ess_hnp_always_use_plm&quot;, 
<br>
to use the &quot;plm&quot; module everywhere. On my patch , by default nothing is 
<br>
changed ( no impact).
<br>
<p>Can you say to me , if this feature( and the patch) is good ?
<br>
<p>thank you
<br>
<p>Damien
<br>
<p>diff orte/mca/ess/hnp/ess_hnp.h
<br>
--- a/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 15:31:24 2009 +0100
<br>
+++ b/orte/mca/ess/hnp/ess_hnp.h        Tue Dec 15 18:19:18 2009 +0100
<br>
@@ -27,7 +27,7 @@
<br>
&nbsp;int orte_ess_hnp_component_open(void);
<br>
&nbsp;int orte_ess_hnp_component_close(void);
<br>
&nbsp;int orte_ess_hnp_component_query(mca_base_module_t **module, int 
<br>
*priority);
<br>
-
<br>
+extern int mca_ess_hnp_always_use_plm;
<br>
<p>&nbsp;ORTE_MODULE_DECLSPEC extern orte_ess_base_component_t 
<br>
mca_ess_hnp_component;
<br>
<p>diff orte/mca/ess/hnp/ess_hnp_component.c
<br>
--- a/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 15:31:24 2009 
<br>
+0100
<br>
+++ b/orte/mca/ess/hnp/ess_hnp_component.c      Tue Dec 15 18:19:18 2009 
<br>
+0100
<br>
@@ -33,6 +33,7 @@
<br>
&nbsp;#include &quot;orte/mca/ess/hnp/ess_hnp.h&quot;
<br>
<p>&nbsp;extern orte_ess_base_module_t orte_ess_hnp_module;
<br>
+int mca_ess_hnp_always_use_plm = 0;
<br>
<p>&nbsp;/*
<br>
&nbsp;&nbsp;* Instantiate the public struct with all of our public information
<br>
@@ -63,6 +64,10 @@
<br>
&nbsp;int
<br>
&nbsp;orte_ess_hnp_component_open(void)
<br>
&nbsp;{
<br>
+               mca_base_param_reg_int(&amp;mca_ess_hnp_component.base_version,
<br>
+                &quot;always_use_plm&quot;,
<br>
+                &quot;Used to force plm on all machine&quot;,
<br>
+                false,false, mca_ess_hnp_always_use_plm 
<br>
,&amp;mca_ess_hnp_always_use_plm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ORTE_SUCCESS;
<br>
&nbsp;}
<br>
<p>diff orte/mca/ess/hnp/ess_hnp_module.c
<br>
--- a/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 15:31:24 2009 +0100
<br>
+++ b/orte/mca/ess/hnp/ess_hnp_module.c Tue Dec 15 18:19:18 2009 +0100
<br>
@@ -442,9 +442,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* node object
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_RETAIN(proc);   /* keep accounting straight */
<br>
+    if(mca_ess_hnp_always_use_plm==0)
<br>
+    {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;daemon = proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;daemon_launched = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node-&gt;state = ORTE_NODE_STATE_UP;
<br>
+    }
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* record that the daemon job is running */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jdata-&gt;num_procs = 1;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Previous message:</strong> <a href="7261.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
<li><strong>Reply:</strong> <a href="7263.php">Ralph Castain: "Re: [OMPI devel] using hnp_always_use_plm"</a>
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
