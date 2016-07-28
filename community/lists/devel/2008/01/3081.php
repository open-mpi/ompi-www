<?
$subject_val = "Re: [OMPI devel] Orte collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 14:28:02 2008" -->
<!-- isoreceived="20080129192802" -->
<!-- sent="Tue, 29 Jan 2008 12:27:49 -0700" -->
<!-- isosent="20080129192749" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte collectives" -->
<!-- id="C3C4CC45.C01C%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3C4E666.13565%rlgraham_at_ornl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 14:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Reply:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Depends upon which one you are using. For example, allgather operates across
<br>
the entire job, so all procs in that jobid have to invoke it. On the other
<br>
hand, allgather_list only operates across the procs specified in the list,
<br>
so only they need to invoke it.
<br>
<p>Xcast sends a message to all procs in the job, but none of those procs needs
<br>
to invoke anything - we just deliver the message to the specified RML tag on
<br>
each proc. Of course, we assume that there is a recv (typically
<br>
non-blocking) posted on that tag (or that it will be posted eventually). If
<br>
not, then the message will just sit in the local oob waiting to be delivered
<br>
- no harm done, it just gets ignored.
<br>
<p>Hope that helps. Let me know if you need some variant as I am adding (not
<br>
reducing or changing) grpcomm capabilities on the tmp branch.
<br>
<p>Ralph
<br>
<p><p><p>On 1/29/08 12:19 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are the group operations in ORTE (I assume this is what the grpcomm
</span><br>
<span class="quotelev1">&gt; component does) available to subsets of a job, or do all procs in the
</span><br>
<span class="quotelev1">&gt; orte_jobid_t need to invoke this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
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
<li><strong>Next message:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Previous message:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<li><strong>In reply to:</strong> <a href="3080.php">Richard Graham: "[OMPI devel] Orte collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<li><strong>Reply:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
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
