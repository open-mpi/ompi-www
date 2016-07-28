<?
$subject_val = "Re: [OMPI devel] orte-dvm / orte-submit race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 22:38:41 2015" -->
<!-- isoreceived="20151015023841" -->
<!-- sent="Wed, 14 Oct 2015 19:38:36 -0700" -->
<!-- isosent="20151015023836" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm / orte-submit race condition" -->
<!-- id="CAMD57ofVjh9SxY861JKGgum408xUOBEizo_r9_hW1ZPxPfi8-A_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E92FA7A3-20CE-401D-9FDC-14484D7783BB_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm / orte-submit race condition<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 22:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18173.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18178.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, please try the attached patch. It will cause two messages to be
<br>
output for each job: one indicating the job has been marked terminated, and
<br>
the other reporting that the completion message was sent to the requestor.
<br>
Let's see what that tells us.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Wed, Oct 14, 2015 at 3:44 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 15 Oct 2015, at 0:26 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Okay, so each orte-submit is reporting job has launched, which means the
</span><br>
<span class="quotelev1">&gt; hang is coming while waiting to hear the job completed. Are you sure that
</span><br>
<span class="quotelev1">&gt; orte-dvm believes the job has completed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, I'm not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In other words, when you say that you observe the job as completing, are
</span><br>
<span class="quotelev1">&gt; you basing that on some output from orte-dvm, or because the procs have
</span><br>
<span class="quotelev1">&gt; exited, or...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ... because the tasks have created their output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can send you a patch tonight that would cause orte-dvm to emit a &quot;job
</span><br>
<span class="quotelev1">&gt; completed&quot; message when it determines each job has terminated - might help
</span><br>
<span class="quotelev1">&gt; us take the next step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm wondering if orte-dvm thinks the job is still running, and the race
</span><br>
<span class="quotelev1">&gt; condition is in that area (as opposed to being in orte-submit itself)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do some counts from the output of orte-dvm provide some hints?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;Releasing job data.*INVALID&quot; dvm_output.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;ORTE_DAEMON_SPAWN_JOB_CMD&quot; dvm_output.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;ORTE_DAEMON_ADD_LOCAL_PROCS&quot; dvm_output.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       42
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ grep &quot;sess_dir_finalize&quot; dvm_output.txt |wc -l
</span><br>
<span class="quotelev1">&gt;       35
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, the &quot;[netbook:XXXX] sess_dir_finalize: proc session dir
</span><br>
<span class="quotelev1">&gt; does not exist&quot; message doesn't show up for the hanging ones, which could
</span><br>
<span class="quotelev1">&gt; support your question that the orte-dvm is at fault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gr,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18171.php">http://www.open-mpi.org/community/lists/devel/2015/10/18171.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18174/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18174/marc.diff">marc.diff</a>
</ul>
<!-- attachment="marc.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18173.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="18171.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18175.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Reply:</strong> <a href="18178.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
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
