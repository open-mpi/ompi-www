<?
$subject_val = "Re: [OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 15:20:25 2011" -->
<!-- isoreceived="20110324192025" -->
<!-- sent="Thu, 24 Mar 2011 13:20:16 -0600" -->
<!-- isosent="20110324192016" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Add child to another parent." -->
<!-- id="DD59B41C-C3FA-4B90-B651-49C0F7B0AED3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinFxywwcRw-he7LcqcRDaLg5ooQsyMB7=_E8v96_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Add child to another parent.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 15:20:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You really don't want to do it that way - you'll create a major confusion in mpirun and the other daemons about who is where. Have you looked at the code in orte/mca/errmgr/hnp/errmgr_hnp.c, line 1573 and following?
<br>
<p>The ability to relocate a failed child process is already in the trunk - it only requires turning &quot;on&quot; with an --enable-recovery flag at runtime if you don't need the checkpoint/restart support. If you do need C/R, you can use that too (just requires some configure flags).
<br>
<p>At the least, the cited code should provide guidance on how to correctly restart procs if you need your own errmgr module for other reasons.
<br>
<p>On Mar 24, 2011, at 7:56 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to restart a child that has failed, now i'm catching the failed child in the errmgr and then i'm packing the child and sending it to another node who has to &quot;adopt&quot; it. Is there any way to do this with te actual implementation? something like add_child. Because the i will have to do somethin like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_list_item_t *item;
</span><br>
<span class="quotelev1">&gt; orte_odls_job_t *jobdat;
</span><br>
<span class="quotelev1">&gt; orte_app_context_t *app;
</span><br>
<span class="quotelev1">&gt; for (item = opal_list_get_first(&amp;orte_local_jobdata);
</span><br>
<span class="quotelev1">&gt;          item != opal_list_get_end(&amp;orte_local_jobdata);
</span><br>
<span class="quotelev1">&gt;          item = opal_list_get_next(item)) {
</span><br>
<span class="quotelev1">&gt;         jobdat = (orte_odls_job_t*)item;
</span><br>
<span class="quotelev1">&gt;         if (jobdat-&gt;jobid == child-&gt;name-&gt;jobid) {
</span><br>
<span class="quotelev1">&gt;             break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; app = jobdat-&gt;apps[child-&gt;app_idx];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In order to do this, i need to have the child in the jobdat. If there is not such thing implemented, could someone give me an advice on how to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<li><strong>Next message:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
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
