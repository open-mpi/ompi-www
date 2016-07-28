<?
$subject_val = "Re: [OMPI devel] RTE node allocation component";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 14 18:45:55 2012" -->
<!-- isoreceived="20120414224555" -->
<!-- sent="Sun, 15 Apr 2012 01:45:48 +0300" -->
<!-- isosent="20120414224548" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE node allocation component" -->
<!-- id="4F89FE1C.6060302_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="65ED6685-F3CB-4DD7-AA6B-11B93084EC1D_at_open-mpi.org" -->
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
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-14 18:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/15/2012 12:36 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The 1.6 branch is a stable series - no new features will be added to it, so your patch won't be going there. I'd focus solely on the trunk.
</span><br>
- Can I add my module(s) to 1.5 branch? (as well as the trunk?)
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you're doing with he RAS is fine for now. In the next few days, I'll be changing the API to the RAS components, but it isn't a big change and we can adjust as you get closer. The orte_job_t object does contain the number of procs to be launched prior to the RAS being invoked, but you have to compute it. Each app_context contains that number - so to get it for the job, you cycle across all the app_contexts and add it up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mapper assigns the final num_procs value in the orte_job_t object. We do this because the user can also run the job without specifying the number of procs, and we'll simply run one proc for every allocated slot. It's a popular option, but wouldn't work here for obvious reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Alex
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Previous message:</strong> <a href="10873.php">Alex Margolin: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>In reply to:</strong> <a href="10872.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
<li><strong>Reply:</strong> <a href="10875.php">Ralph Castain: "Re: [OMPI devel] RTE node allocation component"</a>
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
