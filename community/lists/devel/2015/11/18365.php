<?
$subject_val = "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 17:04:06 2015" -->
<!-- isoreceived="20151111220406" -->
<!-- sent="Wed, 11 Nov 2015 14:04:00 -0800" -->
<!-- isosent="20151111220400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS" -->
<!-- id="57DE1EDE-89B5-4BC3-BAF6-66BD9898941D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F931650D-1BC8-4C4C-8E3F-1E726053E292_at_rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-11 17:04:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Previous message:</strong> <a href="18364.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>In reply to:</strong> <a href="18364.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Reply:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Every orted maintains knowledge of where every process in the DVM is located in case some local client needs information or to otherwise communicate out-of-band with some non-local peer. The RTE has no idea of the possible communication pattern, so we err on the side of more info to avoid sometime having to say &#226;&#128;&#156;I don&#226;&#128;&#153;t know how to do that, Dave&#226;&#128;&#157;
<br>
<p><p><span class="quotelev1">&gt; On Nov 11, 2015, at 1:58 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11 Nov 2015, at 22:43 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You must have the &#226;&#128;&#156;-d&#226;&#128;&#157; option set on the orte-dvm cmd line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You&#226;&#128;&#153;ll get one of those from every daemon in the job each time you launch an app.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, that explains the number better :)
</span><br>
<span class="quotelev1">&gt; Why is every orted aware of a job on another orted?
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18364.php">http://www.open-mpi.org/community/lists/devel/2015/11/18364.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Previous message:</strong> <a href="18364.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>In reply to:</strong> <a href="18364.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>Reply:</strong> <a href="18366.php">Mark Santcroos: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
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
