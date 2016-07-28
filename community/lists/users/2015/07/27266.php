<?
$subject_val = "[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 16:51:36 2015" -->
<!-- isoreceived="20150708205136" -->
<!-- sent="Wed, 08 Jul 2015 22:51:33 +0200" -->
<!-- isosent="20150708205133" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6" -->
<!-- id="559D8D55.5080502_at_hpc2n.umu.se" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-08 16:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Previous message:</strong> <a href="27265.php">Saliya Ekanayake: "[OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>rc in modex in orte/mca/grpcomm/pmi/grpcomm_pmi_module.c is not properly 
<br>
initialized and is causing problems at least with the intel compiler.
<br>
<p>diff -ru site/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c 
<br>
intel/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c
<br>
--- site/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c      2015-06-13 
<br>
22:34:43.000000002 +0200
<br>
+++ intel/orte/mca/grpcomm/pmi/grpcomm_pmi_module.c     2015-07-08 
<br>
22:23:57.000000002 +0200
<br>
@@ -149,7 +149,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_process_name_t name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_vpid_t v;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool local;
<br>
-    int rc, i;
<br>
+    int rc = ORTE_SUCCESS, i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((1, orte_grpcomm_base_framework.framework_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s grpcomm:pmi: modex entered&quot;,
<br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27267.php">Gilles Gouaillardet: "Re: [OMPI users] What collective implementation is used when?"</a>
<li><strong>Previous message:</strong> <a href="27265.php">Saliya Ekanayake: "[OMPI users] What collective implementation is used when?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
<li><strong>Reply:</strong> <a href="27268.php">Ralph Castain: "Re: [OMPI users] Missing init of rc in modex (orte/mca/grpcomm/pmi/grpcomm_pmi_module.c), 1.8.6"</a>
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
