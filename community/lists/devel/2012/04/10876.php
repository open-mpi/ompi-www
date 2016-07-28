<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 19:46:55 2012" -->
<!-- isoreceived="20120414234655" -->
<!-- sent="Sat, 14 Apr 2012 17:46:49 -0600" -->
<!-- isosent="20120414234649" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="B5C124C5-4198-4371-A6FA-0FA6AD2FDCDB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F89EF73.7010504_at_mail.huji.ac.il" -->
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
<strong>Date:</strong> 2012-04-14 19:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10877.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2012, at 3:43 PM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; On 04/15/2012 12:36 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The 1.6 branch is a stable series - no new features will be added to it, so your patch won't be going there. I'd focus solely on the trunk.
</span><br>
<span class="quotelev1">&gt; OK, but what would you recommend for benchmarking? a local 1.6 checkout?
</span><br>
<p>I'd just use the trunk
<br>
<p><span class="quotelev2">&gt;&gt; What you're doing with he RAS is fine for now. In the next few days, I'll be changing the API to the RAS components, but it isn't a big change and we can adjust as you get closer. The orte_job_t object does contain the number of procs to be launched prior to the RAS being invoked, but you have to compute it. Each app_context contains that number - so to get it for the job, you cycle across all the app_contexts and add it up.
</span><br>
<span class="quotelev1">&gt; I'll change my module as you suggested.
</span><br>
<span class="quotelev2">&gt;&gt; The mapper assigns the final num_procs value in the orte_job_t object. We do this because the user can also run the job without specifying the number of procs, and we'll simply run one proc for every allocated slot. It's a popular option, but wouldn't work here for obvious reasons.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Do you mean the rmaps component?
</span><br>
<p>Yes - but like I said, it can only work when the allocation is fixed.
<br>
<p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="10877.php">Josh Hursey: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<li><strong>Previous message:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10874.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
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
