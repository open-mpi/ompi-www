<?
$subject_val = "Re: [OMPI devel] Orte collectives";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 16:34:54 2008" -->
<!-- isoreceived="20080129213454" -->
<!-- sent="Tue, 29 Jan 2008 14:34:41 -0700" -->
<!-- isosent="20080129213441" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Orte collectives" -->
<!-- id="C3C4EA01.C02D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3C4EA98.13572%rlgraham_at_ornl.gov" -->
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
<strong>Date:</strong> 2008-01-29 16:34:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Previous message:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>In reply to:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes and no. It will consume memory as the message will enter the proc's OOB
<br>
and just sit there. However, it will be released when the proc finalizes the
<br>
RTE.
<br>
<p>If that would be a problem, it would be pretty easy to add a directive to
<br>
&quot;delete this message if a recv isn't already waiting for it&quot;.
<br>
<p>Alternatively, you could just have a non-blocking recv sitting on each proc,
<br>
have it check to see &quot;is this of interest to me&quot;, and release the message
<br>
memory that way. Might have to add the list of intended proc names to the
<br>
front of the message so each proc could decide whether or not to pay
<br>
attention to it...
<br>
<p><p><p><p>On 1/29/08 12:37 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sounds like xcast will do what I need.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I don't pull data on all the procs, only the ones calling the recv, will
</span><br>
<span class="quotelev1">&gt; I basically create a memory leak ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/29/08 2:27 PM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Depends upon which one you are using. For example, allgather operates across
</span><br>
<span class="quotelev2">&gt;&gt; the entire job, so all procs in that jobid have to invoke it. On the other
</span><br>
<span class="quotelev2">&gt;&gt; hand, allgather_list only operates across the procs specified in the list,
</span><br>
<span class="quotelev2">&gt;&gt; so only they need to invoke it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Xcast sends a message to all procs in the job, but none of those procs needs
</span><br>
<span class="quotelev2">&gt;&gt; to invoke anything - we just deliver the message to the specified RML tag on
</span><br>
<span class="quotelev2">&gt;&gt; each proc. Of course, we assume that there is a recv (typically
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking) posted on that tag (or that it will be posted eventually). If
</span><br>
<span class="quotelev2">&gt;&gt; not, then the message will just sit in the local oob waiting to be delivered
</span><br>
<span class="quotelev2">&gt;&gt; - no harm done, it just gets ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope that helps. Let me know if you need some variant as I am adding (not
</span><br>
<span class="quotelev2">&gt;&gt; reducing or changing) grpcomm capabilities on the tmp branch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/29/08 12:19 PM, &quot;Richard Graham&quot; &lt;rlgraham_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are the group operations in ORTE (I assume this is what the grpcomm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component does) available to subsets of a job, or do all procs in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_jobid_t need to invoke this ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3085.php">Aurélien Bouteiller: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>Previous message:</strong> <a href="3083.php">Josh Hursey: "Re: [OMPI devel] RES:  v pml question"</a>
<li><strong>In reply to:</strong> <a href="3082.php">Richard Graham: "Re: [OMPI devel] Orte collectives"</a>
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
