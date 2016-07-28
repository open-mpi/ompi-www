<?
$subject_val = "[OMPI devel] status of LSF integration work?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 09:59:02 2008" -->
<!-- isoreceived="20080211145902" -->
<!-- sent="Mon, 11 Feb 2008 10:00:54 -0500" -->
<!-- isosent="20080211150054" -->
<!-- name="Eric Jones" -->
<!-- email="ejon_at_[hidden]" -->
<!-- subject="[OMPI devel] status of LSF integration work?" -->
<!-- id="47B06326.6000804_at_broad.mit.edu" -->
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
<strong>Subject:</strong> [OMPI devel] status of LSF integration work?<br>
<strong>From:</strong> Eric Jones (<em>ejon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 10:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3178.php">Gleb Natapov: "[OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings, MPI mavens,
<br>
<p>Perhaps this belongs on users@, but since it's about development status 
<br>
I thought I start here.  I've fairly recently gotten involved in getting 
<br>
an MPI environment configured for our institute.  We have an existing 
<br>
LSF cluster because most of our work is more High-Throughput than 
<br>
High-Performance, so if I can use LSF to underlie our MPI environment, 
<br>
that'd be administratively easiest.
<br>
<p>I tried to compile the LSF support in the public SVN repo and noticed it 
<br>
was, er, broken.  I'll include the trivial changes we made below.  But 
<br>
the behavior is still fairly unpredictable, mostly involving mpirun 
<br>
never spinning up daemons on other nodes.
<br>
<p>I saw mention that work was being suspended on LSF support pending 
<br>
technical improvements on the LSF side (mentioning that Platform had 
<br>
provided a patch or try.)
<br>
<p>Can I assume, based on the inactivity in the repo, that Platform hasn't 
<br>
resolved the issue?
<br>
<p>Thanks,
<br>
Eric
<br>
<p>------------------------
<br>
Here're the diffs to get LSF support to compile.  We also made a change 
<br>
so it would report the LSF failure code instead of an uninitialized 
<br>
variable when it fails:
<br>
<p>Index: pls_lsf_module.c
<br>
===================================================================
<br>
--- pls_lsf_module.c    (revision 17234)
<br>
+++ pls_lsf_module.c    (working copy)
<br>
@@ -304,7 +304,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (lsb_launch(nodelist_argv, argv, LSF_DJOB_NOWAIT, env) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_FAILED_TO_START);
<br>
-        opal_output(0, &quot;lsb_launch failed: %d&quot;, rc);
<br>
+        opal_output(0, &quot;lsb_launch failed: %d&quot;, lsberrno);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ORTE_ERR_FAILED_TO_START;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto cleanup;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -356,7 +356,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check for failed launch - if so, force terminate */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (failed_launch) {
<br>
-        if (ORTE_SUCCESS !=
<br>
+/*        if (ORTE_SUCCESS != */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_base_daemon_failed(jobid, false, -1, 0, 
<br>
ORTE_JOB_STATE_FAILED_TO_START);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3180.php">Matthias Jurenz: "Re: [OMPI devel] more vt woes"</a>
<li><strong>Previous message:</strong> <a href="3178.php">Gleb Natapov: "[OMPI devel] Something wrong with vt?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
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
