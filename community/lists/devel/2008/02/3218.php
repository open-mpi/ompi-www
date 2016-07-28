<?
$subject_val = "Re: [OMPI devel] status of LSF integration work?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 15:23:03 2008" -->
<!-- isoreceived="20080212202303" -->
<!-- sent="Tue, 12 Feb 2008 15:22:33 -0500" -->
<!-- isosent="20080212202233" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] status of LSF integration work?" -->
<!-- id="197FCB3A-EB55-45FD-80EF-8DC068386B78_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3D66236.45AE%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 15:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3219.php">Jeff Squyres: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>Previous message:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>In reply to:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are two issues:
<br>
<p>- You must have a recent enough version of LSF.  I'm afraid I don't  
<br>
remember the LSF version number offhand, but we both (OMPI and LSF)  
<br>
had to make some changes/fixes to achieve compatibility.
<br>
<p>- LSF compatibility in OMPI is scheduled for v1.3 (i.e., it doesn't  
<br>
exist in the v1.2 series).  As Ralph indicated, we're aware that it's  
<br>
currently broken in the trunk -- it'll be fixed by the v1.3 release,  
<br>
but I don't know exactly when.  To be blunt: I wouldn't count on it in  
<br>
a production environment until v1.3 is officially released.  Betas may  
<br>
become available before v1.3 goes gold that would be suitable for  
<br>
testing, though.
<br>
<p>Here's the OMPI v1.3 roadmap document -- it's more-or-less continually  
<br>
updated:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3">https://svn.open-mpi.org/trac/ompi/milestone/Open%20MPI%201.3</a>
<br>
<p><p>On Feb 11, 2008, at 10:36 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Jeff and I chatted about this today, in fact. We know the LSF  
</span><br>
<span class="quotelev1">&gt; support is
</span><br>
<span class="quotelev1">&gt; borked, but neither of us had time right now to fix it. We plan to  
</span><br>
<span class="quotelev1">&gt; do so,
</span><br>
<span class="quotelev1">&gt; though, before the 1.3 release - just can't promise when.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/11/08 8:00 AM, &quot;Eric Jones&quot; &lt;ejon_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings, MPI mavens,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps this belongs on users@, but since it's about development  
</span><br>
<span class="quotelev2">&gt;&gt; status
</span><br>
<span class="quotelev2">&gt;&gt; I thought I start here.  I've fairly recently gotten involved in  
</span><br>
<span class="quotelev2">&gt;&gt; getting
</span><br>
<span class="quotelev2">&gt;&gt; an MPI environment configured for our institute.  We have an existing
</span><br>
<span class="quotelev2">&gt;&gt; LSF cluster because most of our work is more High-Throughput than
</span><br>
<span class="quotelev2">&gt;&gt; High-Performance, so if I can use LSF to underlie our MPI  
</span><br>
<span class="quotelev2">&gt;&gt; environment,
</span><br>
<span class="quotelev2">&gt;&gt; that'd be administratively easiest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to compile the LSF support in the public SVN repo and  
</span><br>
<span class="quotelev2">&gt;&gt; noticed it
</span><br>
<span class="quotelev2">&gt;&gt; was, er, broken.  I'll include the trivial changes we made below.   
</span><br>
<span class="quotelev2">&gt;&gt; But
</span><br>
<span class="quotelev2">&gt;&gt; the behavior is still fairly unpredictable, mostly involving mpirun
</span><br>
<span class="quotelev2">&gt;&gt; never spinning up daemons on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw mention that work was being suspended on LSF support pending
</span><br>
<span class="quotelev2">&gt;&gt; technical improvements on the LSF side (mentioning that Platform had
</span><br>
<span class="quotelev2">&gt;&gt; provided a patch or try.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I assume, based on the inactivity in the repo, that Platform  
</span><br>
<span class="quotelev2">&gt;&gt; hasn't
</span><br>
<span class="quotelev2">&gt;&gt; resolved the issue?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Here're the diffs to get LSF support to compile.  We also made a  
</span><br>
<span class="quotelev2">&gt;&gt; change
</span><br>
<span class="quotelev2">&gt;&gt; so it would report the LSF failure code instead of an uninitialized
</span><br>
<span class="quotelev2">&gt;&gt; variable when it fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: pls_lsf_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- pls_lsf_module.c    (revision 17234)
</span><br>
<span class="quotelev2">&gt;&gt; +++ pls_lsf_module.c    (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -304,7 +304,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;       */
</span><br>
<span class="quotelev2">&gt;&gt;      if (lsb_launch(nodelist_argv, argv, LSF_DJOB_NOWAIT, env) &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;          ORTE_ERROR_LOG(ORTE_ERR_FAILED_TO_START);
</span><br>
<span class="quotelev2">&gt;&gt; -        opal_output(0, &quot;lsb_launch failed: %d&quot;, rc);
</span><br>
<span class="quotelev2">&gt;&gt; +        opal_output(0, &quot;lsb_launch failed: %d&quot;, lsberrno);
</span><br>
<span class="quotelev2">&gt;&gt;          rc = ORTE_ERR_FAILED_TO_START;
</span><br>
<span class="quotelev2">&gt;&gt;          goto cleanup;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; @@ -356,7 +356,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* check for failed launch - if so, force terminate */
</span><br>
<span class="quotelev2">&gt;&gt;      if (failed_launch) {
</span><br>
<span class="quotelev2">&gt;&gt; -        if (ORTE_SUCCESS !=
</span><br>
<span class="quotelev2">&gt;&gt; +/*        if (ORTE_SUCCESS != */
</span><br>
<span class="quotelev2">&gt;&gt;              orte_pls_base_daemon_failed(jobid, false, -1, 0,
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_JOB_STATE_FAILED_TO_START);
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3219.php">Jeff Squyres: "Re: [OMPI devel] merging new PLPA to the trunk"</a>
<li><strong>Previous message:</strong> <a href="3217.php">Jeff Squyres: "Re: [OMPI devel] New Driver BTL"</a>
<li><strong>In reply to:</strong> <a href="3191.php">Ralph Castain: "Re: [OMPI devel] status of LSF integration work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
<li><strong>Reply:</strong> <a href="3222.php">ejon: "Re: [OMPI devel] status of LSF integration work?"</a>
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
