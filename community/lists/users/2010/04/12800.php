<?
$subject_val = "[OMPI users] Bug report in plm_lsf_module.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:07:07 2010" -->
<!-- isoreceived="20100426180707" -->
<!-- sent="Mon, 26 Apr 2010 14:06:56 -0400" -->
<!-- isosent="20100426180656" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="[OMPI users] Bug report in plm_lsf_module.c" -->
<!-- id="C9BC2912-238E-4C4D-A5CA-E4CDA4646661_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Bug report in plm_lsf_module.c<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:06:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12799.php">Jed Brown: "Re: [OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We recently identify a bug in our LSF cluster.
<br>
The job always hang if all LSF related components present. One observation we have is that the job works fine after removing all LSF related components. 
<br>
<p>Below message from stdout:
<br>
[xxxx:24930] mca: base: components_open: Looking for ess components
<br>
[xxxx:24930] mca: base: components_open: opening ess components
<br>
[xxxx:24930] mca: base: components_open: found loaded component env
<br>
[xxxx:24930] mca: base: components_open: component env has no register function
<br>
[xxxx:24930] mca: base: components_open: component env open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component hnp
<br>
[xxxx:24930] mca: base: components_open: component hnp has no register function
<br>
[xxxx:24930] mca: base: components_open: component hnp open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component lsf
<br>
[xxxx:24930] mca: base: components_open: component lsf has no register function
<br>
[xxxx:24930] mca: base: components_open: component lsf open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component singleton
<br>
[xxxx:24930] mca: base: components_open: component singleton has no register function
<br>
[xxxx:24930] mca: base: components_open: component singleton open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component slurm
<br>
[xxxx:24930] mca: base: components_open: component slurm has no register function
<br>
[xxxx:24930] mca: base: components_open: component slurm open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component tool
<br>
[xxxx:24930] mca: base: components_open: component tool has no register function
<br>
[xxxx:24930] mca: base: components_open: component tool open function successful
<br>
[xxxx:24930] mca: base: components_open: Looking for plm components
<br>
[xxxx:24930] mca: base: components_open: opening plm components
<br>
[xxxx:24930] mca: base: components_open: found loaded component lsf
<br>
[xxxx:24930] mca: base: components_open: component lsf has no register function
<br>
[xxxx:24930] mca: base: components_open: component lsf open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component rsh
<br>
[xxxx:24930] mca: base: components_open: component rsh has no register function
<br>
[xxxx:24930] mca: base: components_open: component rsh open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component slurm
<br>
[xxxx:24930] mca: base: components_open: component slurm has no register function
<br>
[xxxx:24930] mca: base: components_open: component slurm open function successful
<br>
[xxxx:24930] mca:base:select: Auto-selecting plm components
<br>
[xxxx:24930] mca:base:select:(  plm) Querying component [lsf]
<br>
[xxxx:24930] mca:base:select:(  plm) Query of component [lsf] set priority to 75
<br>
[xxxx:24930] mca:base:select:(  plm) Querying component [rsh]
<br>
[xxxx:24930] mca:base:select:(  plm) Query of component [rsh] set priority to 10
<br>
[xxxx:24930] mca:base:select:(  plm) Querying component [slurm]
<br>
[xxxx:24930] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
<br>
[xxxx:24930] mca:base:select:(  plm) Selected component [lsf]
<br>
[xxxx:24930] mca: base: close: component rsh closed
<br>
[xxxx:24930] mca: base: close: unloading component rsh
<br>
[xxxx:24930] mca: base: close: component slurm closed
<br>
[xxxx:24930] mca: base: close: unloading component slurm
<br>
[xxxx:24930] mca: base: components_open: Looking for rml components
<br>
[xxxx:24930] mca: base: components_open: opening rml components
<br>
[xxxx:24930] mca: base: components_open: found loaded component oob
<br>
[xxxx:24930] mca: base: components_open: component oob has no register function
<br>
[xxxx:24930] mca: base: components_open: Looking for oob components
<br>
[xxxx:24930] mca: base: components_open: opening oob components
<br>
[xxxx:24930] mca: base: components_open: found loaded component tcp
<br>
[xxxx:24930] mca: base: components_open: component tcp has no register function
<br>
[xxxx:24930] mca: base: components_open: component tcp open function successful
<br>
[xxxx:24930] mca: base: components_open: component oob open function successful
<br>
[xxxx:24930] orte_rml_base_select: initializing rml component oob
<br>
[xxxx:24930] mca: base: components_open: Looking for ras components
<br>
[xxxx:24930] mca: base: components_open: opening ras components
<br>
[xxxx:24930] mca: base: components_open: found loaded component lsf
<br>
[xxxx:24930] mca: base: components_open: component lsf has no register function
<br>
[xxxx:24930] mca: base: components_open: component lsf open function successful
<br>
[xxxx:24930] mca: base: components_open: found loaded component slurm
<br>
[xxxx:24930] mca: base: components_open: component slurm has no register function
<br>
[xxxx:24930] mca: base: components_open: component slurm open function successful
<br>
[xxxx:24930] mca:base:select: Auto-selecting ras components
<br>
[xxxx:24930] mca:base:select:(  ras) Querying component [lsf]
<br>
[xxxx:24930] mca:base:select:(  ras) Query of component [lsf] set priority to 75
<br>
[xxxx:24930] mca:base:select:(  ras) Querying component [slurm]
<br>
[xxxx:24930] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
<br>
[xxxx:24930] mca:base:select:(  ras) Selected component [lsf]
<br>
[xxxx:24930] mca: base: close: unloading component slurm
<br>
[xxxx:24930] plm:lsf: final top-level argv:
<br>
[xxxx:24930] plm:lsf:     orted -mca ess lsf -mca orte_ess_jobid 2605449216 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2605449216.0;tcp://xxx.xxx.xxx.xxx:57649&quot;
<br>
<p><p>Below message is from the log file from res daemon:
<br>
Apr 22 15:52:01 2010 6540 3 7.06 execAtask_: lsfExecvp() failed.
<br>
Apr 22 15:52:01 2010 6540 3 7.06 rexecChild: execAtask_() failed, No such file or directory.
<br>
<p>Above messages suggest that orted is not in the path.
<br>
<p>Applying below patch seem to fix the problem.
<br>
<p>--- plm_lsf_module.c.orig       2010-04-26 13:27:59.699974000 -0400
<br>
+++ plm_lsf_module.c    2010-04-26 10:58:24.719737000 -0400
<br>
@@ -304,7 +304,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* orterun can do the rest of its stuff. Instead, we'll catch any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* failures and deal with them elsewhere
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-    if (lsb_launch(nodelist_argv, argv, LSF_DJOB_NOWAIT, env) &lt; 0) {
<br>
+    if (lsb_launch(nodelist_argv, argv, LSF_DJOB_REPLACE_ENV | LSF_DJOB_NOWAIT, env) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_FAILED_TO_START);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;lsb_launch failed: %d&quot;, rc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = ORTE_ERR_FAILED_TO_START;
<br>
<p>If the LSF_DJOB_REPLACE_ENV option is specified, envp entries will overwrite all existing environment values except those needed by LSF. 
<br>
If the function fails, lsberrno is set to indicate the error. It would be useful if we can 
<br>
One thing we can not guarantee is that orted is in the path of remote node. LSF_DJOB_REPLACE_ENV can certainly be used to overcome this. But it may also have some side effect.
<br>
<p>There are few things that still not quite clear to us. lsb_launch supposes to return a negative number, not sure why it did not in our case.
<br>
<p><p>Not sure if it related to change set 19033 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/19033">https://svn.open-mpi.org/trac/ompi/changeset/19033</a>) in certain way.
<br>
<p><p>Teng 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12799.php">Jed Brown: "Re: [OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12801.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12814.php">Ralph Castain: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
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
