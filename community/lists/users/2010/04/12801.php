<?
$subject_val = "Re: [OMPI users] Bug report in plm_lsf_module.c";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:35:04 2010" -->
<!-- isoreceived="20100426183504" -->
<!-- sent="Mon, 26 Apr 2010 12:34:53 -0600" -->
<!-- isosent="20100426183453" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug report in plm_lsf_module.c" -->
<!-- id="84F7BCF7-7B9C-4BB6-8C70-F884775E2633_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9BC2912-238E-4C4D-A5CA-E4CDA4646661_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug report in plm_lsf_module.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:34:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Appreciate your input! None of the developers have access to an LSF machine any more, so we can't test it :-/
<br>
<p>What version of OMPI does this patch apply to? I can go ahead and add it - just want to know if it should just go to the trunk and 1.5 series, or also the 1.4 series.
<br>
<p>Thanks again!
<br>
Ralph
<br>
<p>On Apr 26, 2010, at 12:06 PM, Teng Lin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We recently identify a bug in our LSF cluster.
</span><br>
<span class="quotelev1">&gt; The job always hang if all LSF related components present. One observation we have is that the job works fine after removing all LSF related components. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below message from stdout:
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: Looking for ess components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: opening ess components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component env
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component env has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component env open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component hnp
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component hnp has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component hnp open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component lsf
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component singleton
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component singleton has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component singleton open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component tool
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component tool has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component tool open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component lsf
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Querying component [lsf]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Query of component [lsf] set priority to 75
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  plm) Selected component [lsf]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: Looking for rml components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component oob
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component oob has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component oob open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] orte_rml_base_select: initializing rml component oob
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: Looking for ras components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component lsf
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component lsf open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  ras) Querying component [lsf]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  ras) Query of component [lsf] set priority to 75
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  ras) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca:base:select:(  ras) Selected component [lsf]
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] plm:lsf: final top-level argv:
</span><br>
<span class="quotelev1">&gt; [xxxx:24930] plm:lsf:     orted -mca ess lsf -mca orte_ess_jobid 2605449216 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;2605449216.0;tcp://xxx.xxx.xxx.xxx:57649&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below message is from the log file from res daemon:
</span><br>
<span class="quotelev1">&gt; Apr 22 15:52:01 2010 6540 3 7.06 execAtask_: lsfExecvp() failed.
</span><br>
<span class="quotelev1">&gt; Apr 22 15:52:01 2010 6540 3 7.06 rexecChild: execAtask_() failed, No such file or directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Above messages suggest that orted is not in the path.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Applying below patch seem to fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- plm_lsf_module.c.orig       2010-04-26 13:27:59.699974000 -0400
</span><br>
<span class="quotelev1">&gt; +++ plm_lsf_module.c    2010-04-26 10:58:24.719737000 -0400
</span><br>
<span class="quotelev1">&gt; @@ -304,7 +304,7 @@
</span><br>
<span class="quotelev1">&gt;      * orterun can do the rest of its stuff. Instead, we'll catch any
</span><br>
<span class="quotelev1">&gt;      * failures and deal with them elsewhere
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt; -    if (lsb_launch(nodelist_argv, argv, LSF_DJOB_NOWAIT, env) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +    if (lsb_launch(nodelist_argv, argv, LSF_DJOB_REPLACE_ENV | LSF_DJOB_NOWAIT, env) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;         ORTE_ERROR_LOG(ORTE_ERR_FAILED_TO_START);
</span><br>
<span class="quotelev1">&gt;         opal_output(0, &quot;lsb_launch failed: %d&quot;, rc);
</span><br>
<span class="quotelev1">&gt;         rc = ORTE_ERR_FAILED_TO_START;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the LSF_DJOB_REPLACE_ENV option is specified, envp entries will overwrite all existing environment values except those needed by LSF. 
</span><br>
<span class="quotelev1">&gt; If the function fails, lsberrno is set to indicate the error. It would be useful if we can 
</span><br>
<span class="quotelev1">&gt; One thing we can not guarantee is that orted is in the path of remote node. LSF_DJOB_REPLACE_ENV can certainly be used to overcome this. But it may also have some side effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are few things that still not quite clear to us. lsb_launch supposes to return a negative number, not sure why it did not in our case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if it related to change set 19033 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/19033">https://svn.open-mpi.org/trac/ompi/changeset/19033</a>) in certain way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Teng 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Reply:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
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
