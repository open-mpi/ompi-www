<?
$subject_val = "[OMPI devel] mpirun return code problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 08:06:21 2008" -->
<!-- isoreceived="20080408120621" -->
<!-- sent="Tue, 08 Apr 2008 08:06:18 -0400" -->
<!-- isosent="20080408120618" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun return code problems" -->
<!-- id="47FB5FBA.9060103_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun return code problems<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 08:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<li><strong>Previous message:</strong> <a href="3679.php">Shiqing Fan: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<li><strong>Reply:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I reported this before, but it seems that the report got lost. I have 
<br>
found some situations where mpirun will return a '0' when there is an error.
<br>
<p>An easy way to reproduce this is to edit the file 
<br>
'orte/mca/plm/base/plm_base_launch_support.c' and on line 154 put in 
<br>
'return ORTE_ERROR;' (or apply the attached diff).
<br>
<p>Then recompile and run mpirun. mpirun will indicate there was an error, 
<br>
but will still return 0. The reason this is concerning to me is that MTT 
<br>
only looks at return codes, so our tests may be failing and we wouldn't 
<br>
know it.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>
<p>
Index: orte/mca/plm/base/plm_base_launch_support.c
<br>
===================================================================
<br>
--- orte/mca/plm/base/plm_base_launch_support.c	(revision 18092)
<br>
+++ orte/mca/plm/base/plm_base_launch_support.c	(working copy)
<br>
@@ -151,7 +151,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_JOBID_PRINT(job), ORTE_ERROR_NAME(rc)));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    
<br>
+   return ORTE_ERROR; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* complete wiring up the iof */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((5, orte_plm_globals.output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;%s plm:base:launch wiring up iof&quot;,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<li><strong>Previous message:</strong> <a href="3679.php">Shiqing Fan: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
<li><strong>Reply:</strong> <a href="3681.php">Ralph H Castain: "Re: [OMPI devel] mpirun return code problems"</a>
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
