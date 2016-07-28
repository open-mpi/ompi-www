<?
$subject_val = "Re: [OMPI devel] Orte collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:37:22 2008" -->
<!-- isoreceived="20080129193722" -->
<!-- sent="Tue, 29 Jan 2008 14:37:12 -0500" -->
<!-- isosent="20080129193712" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte collectives" -->
<!-- id="C3C4EA98.13572%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3C4CC45.C01C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Orte collectives<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 14:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Previous message:</strong> <a href="3081.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3081.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Reply:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like xcast will do what I need.
<br>
<p>If I don't pull data on all the procs, only the ones calling the recv, will
<br>
I basically create a memory leak ?
<br>
<p>Thanks,
<br>
Rich
<br>
<p><p>On 1/29/08 2:27 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Depends upon which one you are using. For example, allgather operates across
</span><br>
<span class="quotelev1">&gt; the entire job, so all procs in that jobid have to invoke it. On the other
</span><br>
<span class="quotelev1">&gt; hand, allgather_list only operates across the procs specified in the list,
</span><br>
<span class="quotelev1">&gt; so only they need to invoke it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Xcast sends a message to all procs in the job, but none of those procs needs
</span><br>
<span class="quotelev1">&gt; to invoke anything - we just deliver the message to the specified RML tag on
</span><br>
<span class="quotelev1">&gt; each proc. Of course, we assume that there is a recv (typically
</span><br>
<span class="quotelev1">&gt; non-blocking) posted on that tag (or that it will be posted eventually). If
</span><br>
<span class="quotelev1">&gt; not, then the message will just sit in the local oob waiting to be delivered
</span><br>
<span class="quotelev1">&gt; - no harm done, it just gets ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that helps. Let me know if you need some variant as I am adding (not
</span><br>
<span class="quotelev1">&gt; reducing or changing) grpcomm capabilities on the tmp branch.
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
<span class="quotelev1">&gt; On 1/29/08 12:19 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are the group operations in ORTE (I assume this is what the grpcomm
</span><br>
<span class="quotelev2">&gt;&gt; component does) available to subsets of a job, or do all procs in the
</span><br>
<span class="quotelev2">&gt;&gt; orte_jobid_t need to invoke this ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Previous message:</strong> <a href="3081.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3081.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Reply:</strong> <a href="3084.php">Ralph H Castain: "Re: [OMPI devel] Orte collectives"</a>
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
