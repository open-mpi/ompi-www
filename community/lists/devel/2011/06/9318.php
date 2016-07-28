<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  7 15:08:50 2011" -->
<!-- isoreceived="20110607190850" -->
<!-- sent="Tue, 7 Jun 2011 13:08:45 -0600" -->
<!-- isosent="20110607190845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTi=P18pJ4wH7GvXTtEWg2eWNCvB4aQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B00C50F4D4E44CC6BC8F54B7B57B1B89_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-07 15:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - thanks! That really helped clarify things. Much appreciated.
<br>
<p>Will look at the patch in this light...
<br>
<p>On Tue, Jun 7, 2011 at 1:00 PM, Wesley Bland &lt;wbland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps it would help if you folks could provide a little explanation about
</span><br>
<span class="quotelev1">&gt; how you use epoch? While the value sounds similar, your explanations are
</span><br>
<span class="quotelev1">&gt; beginning to sound very different from what we are doing and/or had
</span><br>
<span class="quotelev1">&gt; envisioned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure how you can talk about an epoch being too high or too low,
</span><br>
<span class="quotelev1">&gt; unless you are envisioning an overall system where procs try to maintain
</span><br>
<span class="quotelev1">&gt; some global notion of the value - which sounds like a race condition begging
</span><br>
<span class="quotelev1">&gt; to cause problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we say epoch we mean a value that is stored locally. When a failure is
</span><br>
<span class="quotelev1">&gt; detected the detector notifies the HNP who notifies everyone else. Thus
</span><br>
<span class="quotelev1">&gt; everyone will _eventually_ receive the notification that the process has
</span><br>
<span class="quotelev1">&gt; failed. It may take a while for you to receive the notification, but in the
</span><br>
<span class="quotelev1">&gt; meantime you will behave normally. When you do receive the notification that
</span><br>
<span class="quotelev1">&gt; the failure occurred, you update your local copy of the epoch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is similar to the definition of the &quot;perfect&quot; failure detector that
</span><br>
<span class="quotelev1">&gt; Josh references. It doesn't matter if you don't find about the failure
</span><br>
<span class="quotelev1">&gt; immediately, as long as you find out about it eventually. If you aren't
</span><br>
<span class="quotelev1">&gt; actually in the same jobid as the failed process you might never find out
</span><br>
<span class="quotelev1">&gt; about the failure because it does not apply to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you then thinking that MPI processes are going to detect failure
</span><br>
<span class="quotelev1">&gt; instead of local orteds?? Right now, no MPI process would ever report
</span><br>
<span class="quotelev1">&gt; failure of a peer - the orted detects failure using the sigchild and reports
</span><br>
<span class="quotelev1">&gt; it. What mechanism would the MPI procs use, and how would that be more
</span><br>
<span class="quotelev1">&gt; reliable than sigchild??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Definitely not. ORTEDs are the processes that detect and report the
</span><br>
<span class="quotelev1">&gt; failures. They can detect the failure of other ORTEDs or of applications.
</span><br>
<span class="quotelev1">&gt; Basically anything to which they have a connection.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So right now the HNP can -never- receive more than one failure report at a
</span><br>
<span class="quotelev1">&gt; time for a process. The only issue we've been working is that there are
</span><br>
<span class="quotelev1">&gt; several pathways for reporting that error - e.g., if the orted detects the
</span><br>
<span class="quotelev1">&gt; process fails and reports it, and then the orted itself fails, we can get
</span><br>
<span class="quotelev1">&gt; multiple failure events back at the HNP before we respond to the first one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not the same issue as having MPI procs reporting failures...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is where the epoch becomes necessary. When reporting a failure, you
</span><br>
<span class="quotelev1">&gt; tell the HNP which process failed by name, including the epoch. Thus the HNP
</span><br>
<span class="quotelev1">&gt; will not make a process as having failed twice (thus incrementing the epoch
</span><br>
<span class="quotelev1">&gt; twice and notifying everyone about the failure twice). The HNP might receive
</span><br>
<span class="quotelev1">&gt; multiple notifications because more than one ORTED could (and often will)
</span><br>
<span class="quotelev1">&gt; detect the failure. It is easier to have the HNP decide what is a failure
</span><br>
<span class="quotelev1">&gt; and what is a duplicate rather than have the ORTEDs reach some consensus
</span><br>
<span class="quotelev1">&gt; about the fact that a process has failed. Much less overhead this way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what ORCM does in the respect, but I don't know of anything in
</span><br>
<span class="quotelev1">&gt; ORTE that would track this data other than the process state and that
</span><br>
<span class="quotelev1">&gt; doesn't keep track of anything beyond one failure (which admittedly isn't an
</span><br>
<span class="quotelev1">&gt; issue until we implement process recovery).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We aren't having any problems with process recovery and process state -
</span><br>
<span class="quotelev1">&gt; without tracking epochs. We only track &quot;incarnations&quot; so that we can pass it
</span><br>
<span class="quotelev1">&gt; down to the apps, which use that info to guide their restart.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you clarify why you are having a problem in this regard? Might help
</span><br>
<span class="quotelev1">&gt; to better understand your proposed changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we're talking about the same thing here. The only difference is
</span><br>
<span class="quotelev1">&gt; that I'm not looking at the ORCM code so I don't have the &quot;incarnations&quot;.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9318/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9317.php">Wesley Bland: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9319.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
