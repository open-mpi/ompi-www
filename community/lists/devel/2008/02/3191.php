<?
$subject_val = "Re: [OMPI devel] status of LSF integration work?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 22:36:17 2008" -->
<!-- isoreceived="20080212033617" -->
<!-- sent="Mon, 11 Feb 2008 20:36:06 -0700" -->
<!-- isosent="20080212033606" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] status of LSF integration work?" -->
<!-- id="C3D66236.45AE%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47B06326.6000804_at_broad.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] status of LSF integration work?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-11 22:36:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
<li><strong>In reply to:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3218.php">Jeff Squyres: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3218.php">Jeff Squyres: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I chatted about this today, in fact. We know the LSF support is
<br>
borked, but neither of us had time right now to fix it. We plan to do so,
<br>
though, before the 1.3 release - just can't promise when.
<br>
<p>Ralph
<br>
<p><p><p>On 2/11/08 8:00 AM, &quot;Eric Jones&quot; &lt;ejon_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greetings, MPI mavens,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps this belongs on users@, but since it's about development status
</span><br>
<span class="quotelev1">&gt; I thought I start here.  I've fairly recently gotten involved in getting
</span><br>
<span class="quotelev1">&gt; an MPI environment configured for our institute.  We have an existing
</span><br>
<span class="quotelev1">&gt; LSF cluster because most of our work is more High-Throughput than
</span><br>
<span class="quotelev1">&gt; High-Performance, so if I can use LSF to underlie our MPI environment,
</span><br>
<span class="quotelev1">&gt; that'd be administratively easiest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to compile the LSF support in the public SVN repo and noticed it
</span><br>
<span class="quotelev1">&gt; was, er, broken.  I'll include the trivial changes we made below.  But
</span><br>
<span class="quotelev1">&gt; the behavior is still fairly unpredictable, mostly involving mpirun
</span><br>
<span class="quotelev1">&gt; never spinning up daemons on other nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw mention that work was being suspended on LSF support pending
</span><br>
<span class="quotelev1">&gt; technical improvements on the LSF side (mentioning that Platform had
</span><br>
<span class="quotelev1">&gt; provided a patch or try.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can I assume, based on the inactivity in the repo, that Platform hasn't
</span><br>
<span class="quotelev1">&gt; resolved the issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt; Here're the diffs to get LSF support to compile.  We also made a change
</span><br>
<span class="quotelev1">&gt; so it would report the LSF failure code instead of an uninitialized
</span><br>
<span class="quotelev1">&gt; variable when it fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: pls_lsf_module.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- pls_lsf_module.c    (revision 17234)
</span><br>
<span class="quotelev1">&gt; +++ pls_lsf_module.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -304,7 +304,7 @@
</span><br>
<span class="quotelev1">&gt;        */
</span><br>
<span class="quotelev1">&gt;       if (lsb_launch(nodelist_argv, argv, LSF_DJOB_NOWAIT, env) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;           ORTE_ERROR_LOG(ORTE_ERR_FAILED_TO_START);
</span><br>
<span class="quotelev1">&gt; -        opal_output(0, &quot;lsb_launch failed: %d&quot;, rc);
</span><br>
<span class="quotelev1">&gt; +        opal_output(0, &quot;lsb_launch failed: %d&quot;, lsberrno);
</span><br>
<span class="quotelev1">&gt;           rc = ORTE_ERR_FAILED_TO_START;
</span><br>
<span class="quotelev1">&gt;           goto cleanup;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; @@ -356,7 +356,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       /* check for failed launch - if so, force terminate */
</span><br>
<span class="quotelev1">&gt;       if (failed_launch) {
</span><br>
<span class="quotelev1">&gt; -        if (ORTE_SUCCESS !=
</span><br>
<span class="quotelev1">&gt; +/*        if (ORTE_SUCCESS != */
</span><br>
<span class="quotelev1">&gt;               orte_pls_base_daemon_failed(jobid, false, -1, 0,
</span><br>
<span class="quotelev1">&gt; ORTE_JOB_STATE_FAILED_TO_START);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3192.php">Ralph Castain: "[OMPI devel] Scheduled merge of ORTE devel branch to trunk"</a>
<li><strong>Previous message:</strong> <a href="3190.php">Ralph Castain: "Re: [OMPI devel] Leopard problems"</a>
<li><strong>In reply to:</strong> <a href="3179.php">Eric Jones: "[OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3218.php">Jeff Squyres: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3218.php">Jeff Squyres: "Re: [OMPI devel] status of LSF integration work?"</a>
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
