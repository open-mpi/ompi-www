<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 19:46:01 2012" -->
<!-- isoreceived="20120414234601" -->
<!-- sent="Sat, 14 Apr 2012 17:45:54 -0600" -->
<!-- isosent="20120414234554" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="B7B7321B-8053-4E40-9E2C-0312AA0400F7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F89FE1C.6060302_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE node allocation component<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-14 19:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10876.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope - 1.5 is completed and will now be rotated to 1.6 in the near future. The trunk will be branched to create the new 1.7 series, and then released this summer. Your module can go in there, I suspect.
<br>
<p>On Apr 14, 2012, at 4:45 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; On 04/15/2012 12:36 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The 1.6 branch is a stable series - no new features will be added to it, so your patch won't be going there. I'd focus solely on the trunk.
</span><br>
<span class="quotelev1">&gt; - Can I add my module(s) to 1.5 branch? (as well as the trunk?)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you're doing with he RAS is fine for now. In the next few days, I'll be changing the API to the RAS components, but it isn't a big change and we can adjust as you get closer. The orte_job_t object does contain the number of procs to be launched prior to the RAS being invoked, but you have to compute it. Each app_context contains that number - so to get it for the job, you cycle across all the app_contexts and add it up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The mapper assigns the final num_procs value in the orte_job_t object. We do this because the user can also run the job without specifying the number of procs, and we'll simply run one proc for every allocated slot. It's a popular option, but wouldn't work here for obvious reasons.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Alex
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
<li><strong>Next message:</strong> <a href="10876.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
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
