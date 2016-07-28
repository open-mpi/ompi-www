<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:00:11 2011" -->
<!-- isoreceived="20110607190011" -->
<!-- sent="Tue, 7 Jun 2011 15:00:05 -0400" -->
<!-- isosent="20110607190005" -->
<!-- name="Wesley Bland" -->
<!-- email="wbland_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="B00C50F4D4E44CC6BC8F54B7B57B1B89_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BANLkTi=QkWmz+BXcdSNKijTOJeTiTzmHDg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Wesley Bland (<em>wbland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 15:00:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9316.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps it would help if you folks could provide a little explanation about how you use epoch? While the value sounds similar, your explanations are beginning to sound very different from what we are doing and/or had envisioned. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure how you can talk about an epoch being too high or too low, unless you are envisioning an overall system where procs try to maintain some global notion of the value - which sounds like a race condition begging to cause problems. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>When we say epoch we mean a value that is stored locally. When a failure is detected the detector notifies the HNP who notifies everyone else. Thus everyone will _eventually_ receive the notification that the process has failed. It may take a while for you to receive the notification, but in the meantime you will behave normally. When you do receive the notification that the failure occurred, you update your local copy of the epoch.
<br>
<p>This is similar to the definition of the &quot;perfect&quot; failure detector that Josh references. It doesn't matter if you don't find about the failure immediately, as long as you find out about it eventually. If you aren't actually in the same jobid as the failed process you might never find out about the failure because it does not apply to you.
<br>
<span class="quotelev1">&gt; Are you then thinking that MPI processes are going to detect failure instead of local orteds?? Right now, no MPI process would ever report failure of a peer - the orted detects failure using the sigchild and reports it. What mechanism would the MPI procs use, and how would that be more reliable than sigchild??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Definitely not. ORTEDs are the processes that detect and report the failures. They can detect the failure of other ORTEDs or of applications. Basically anything to which they have a connection.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So right now the HNP can -never- receive more than one failure report at a time for a process. The only issue we've been working is that there are several pathways for reporting that error - e.g., if the orted detects the process fails and reports it, and then the orted itself fails, we can get multiple failure events back at the HNP before we respond to the first one. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not the same issue as having MPI procs reporting failures...
</span><br>
This is where the epoch becomes necessary. When reporting a failure, you tell the HNP which process failed by name, including the epoch. Thus the HNP will not make a process as having failed twice (thus incrementing the epoch twice and notifying everyone about the failure twice). The HNP might receive multiple notifications because more than one ORTED could (and often will) detect the failure. It is easier to have the HNP decide what is a failure and what is a duplicate rather than have the ORTEDs reach some consensus about the fact that a process has failed. Much less overhead this way.
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what ORCM does in the respect, but I don't know of anything in ORTE that would track this data other than the process state and that doesn't keep track of anything beyond one failure (which admittedly isn't an issue until we implement process recovery). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We aren't having any problems with process recovery and process state - without tracking epochs. We only track &quot;incarnations&quot; so that we can pass it down to the apps, which use that info to guide their restart. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you clarify why you are having a problem in this regard? Might help to better understand your proposed changes.
</span><br>
I think we're talking about the same thing here. The only difference is that I'm not looking at the ORCM code so I don't have the &quot;incarnations&quot;.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9317/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9316.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9315.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9318.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
