<?
$subject_val = "[OMPI devel] FT code (again)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 10:26:14 2014" -->
<!-- isoreceived="20141219152614" -->
<!-- sent="Fri, 19 Dec 2014 16:26:13 +0100" -->
<!-- isosent="20141219152613" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="[OMPI devel] FT code (again)" -->
<!-- id="20141219152613.GQ28353_at_lisas.de" -->
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
<strong>Subject:</strong> [OMPI devel] FT code (again)<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 10:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Previous message:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Reply:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Again I am trying to get the FT code working. This time I am unsure how
<br>
to resolve the code changes from this commit:
<br>
<p>commit aec5cd08bd8c33677276612b899b48618d271efa
<br>
Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Date:   Thu Aug 21 18:56:47 2014 +0000
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Per the PMIx RFC:
<br>
<p><p>This includes changes like this:
<br>
<p><p>@@ -172,17 +164,7 @@ static int rte_init(void)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* in the job won't be executing this step, so we would hang
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_PROC_IS_NON_MPI &amp;&amp; !orte_do_not_barrier) {
<br>
-        orte_grpcomm_collective_t coll;
<br>
-        OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
<br>
-        coll.id = orte_process_info.peer_modex;
<br>
-        coll.active = true;
<br>
-        if (ORTE_SUCCESS != (ret = orte_grpcomm.modex(&amp;coll))) {
<br>
-            ORTE_ERROR_LOG(ret);
<br>
-            error = &quot;orte modex&quot;;
<br>
-            goto error;
<br>
-        }
<br>
-        ORTE_WAIT_FOR_COMPLETION(coll.active);
<br>
-        OBJ_DESTRUCT(&amp;coll);
<br>
+        opal_pmix.fence(NULL, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>In the FT code in orte/mca/ess/env/ess_env_module.c there is similar code:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT(&amp;coll, orte_grpcomm_collective_t);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;coll.id = orte_process_info.snapc_init_barrier;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_SUCCESS != (ret = orte_grpcomm.barrier(&amp;coll))) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coll.active = true;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_WAIT_FOR_COMPLETION(coll.active);
<br>
<p><p>How can this be expressed with the new code?
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Previous message:</strong> <a href="16687.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Still getting DDT test assert fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
<li><strong>Reply:</strong> <a href="16689.php">George Bosilca: "Re: [OMPI devel] FT code (again)"</a>
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
