<?
$subject_val = "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 17:46:18 2015" -->
<!-- isoreceived="20151111224618" -->
<!-- sent="Wed, 11 Nov 2015 23:46:13 +0100" -->
<!-- isosent="20151111224613" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS" -->
<!-- id="5B64C3EF-1B15-4154-8435-968F62E07C0A_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="57DE1EDE-89B5-4BC3-BAF6-66BD9898941D_at_open-mpi.org" -->
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
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-11 17:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<li><strong>Previous message:</strong> <a href="18365.php">Ralph Castain: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>In reply to:</strong> <a href="18365.php">Ralph Castain: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If Dave says it's ok then it must be! :)
<br>
<p>(Thanks for the explanation)
<br>
<p><span class="quotelev1">&gt; On 11 Nov 2015, at 23:04 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Every orted maintains knowledge of where every process in the DVM is located in case some local client needs information or to otherwise communicate out-of-band with some non-local peer. The RTE has no idea of the possible communication pattern, so we err on the side of more info to avoid sometime having to say &#226;&#128;&#156;I don&#226;&#128;&#153;t know how to do that, Dave&#226;&#128;&#157;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 11, 2015, at 1:58 PM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11 Nov 2015, at 22:43 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You must have the &#226;&#128;&#156;-d&#226;&#128;&#157; option set on the orte-dvm cmd line?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You&#226;&#128;&#153;ll get one of those from every daemon in the job each time you launch an app.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ok, that explains the number better :)
</span><br>
<span class="quotelev2">&gt;&gt; Why is every orted aware of a job on another orted?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18364.php">http://www.open-mpi.org/community/lists/devel/2015/11/18364.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/11/18365.php">http://www.open-mpi.org/community/lists/devel/2015/11/18365.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18367.php">Edgar Gabriel: "[OMPI devel] interfaces gone?"</a>
<li><strong>Previous message:</strong> <a href="18365.php">Ralph Castain: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
<li><strong>In reply to:</strong> <a href="18365.php">Ralph Castain: "Re: [OMPI devel] question on ORTE_DAEMON_ADD_LOCAL_PROCS"</a>
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
