<?
$subject_val = "Re: [OMPI devel] [RFC] Default hostfile MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 12:53:54 2008" -->
<!-- isoreceived="20080303175354" -->
<!-- sent="Mon, 03 Mar 2008 10:53:41 -0700" -->
<!-- isosent="20080303175341" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Default hostfile MCA param" -->
<!-- id="C3F18935.C77E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47CC2AD5.7070603_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Default hostfile MCA param<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 12:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I personally have no objection, but I would ask then that the wiki be
<br>
modified to cover this case. All I require is that someone define the syntax
<br>
to be used to indicate &quot;this is a node I do -not- want used&quot;, or
<br>
alternatively a flag that indicates &quot;all nodes below are -not- to be used&quot;.
<br>
<p>Implementation isn't too hard once I have that...
<br>
<p><p>On 3/3/08 9:44 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could this mechanism be used also to exclude a node, indicating to never
</span><br>
<span class="quotelev1">&gt; run a job there? Here is the problem that I face quite often: students
</span><br>
<span class="quotelev1">&gt; working on the homework forget to allocate a partition  on the cluster,
</span><br>
<span class="quotelev1">&gt; and just type mpirun. Because of that, all jobs end up running on the
</span><br>
<span class="quotelev1">&gt; front-end node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If we would have now the ability to specify in a default hostfile, to
</span><br>
<span class="quotelev1">&gt; never run a job on a specified node (e.g. the front end node), users
</span><br>
<span class="quotelev1">&gt; would get an error message when trying to do that. I am aware that
</span><br>
<span class="quotelev1">&gt; that's a little ugly...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; THanks
</span><br>
<span class="quotelev1">&gt; edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I forget all the formatting we are supposed to use, so I hope you'll all
</span><br>
<span class="quotelev2">&gt;&gt; just bear with me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George brought up the fact that we used to have an MCA param to specify a
</span><br>
<span class="quotelev2">&gt;&gt; hostfile to use for a job. The hostfile behavior described on the wiki,
</span><br>
<span class="quotelev2">&gt;&gt; however, doesn't provide for that option. It associates a hostfile with a
</span><br>
<span class="quotelev2">&gt;&gt; specific app_context, and provides a detailed hierarchical layout of how
</span><br>
<span class="quotelev2">&gt;&gt; mpirun is to interpret that information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I propose to do is add an MCA param called &quot;OMPI_MCA_default_hostfile&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to replace the deprecated capability. If found, the system's behavior will
</span><br>
<span class="quotelev2">&gt;&gt; be:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. in a managed environment, the default hostfile will be used to filter the
</span><br>
<span class="quotelev2">&gt;&gt; discovered nodes to define the available node pool. Any hostfile and/or dash
</span><br>
<span class="quotelev2">&gt;&gt; host options provided to an app_context will be used to further filter the
</span><br>
<span class="quotelev2">&gt;&gt; node pool to define the specific nodes for use by that app_context. Thus,
</span><br>
<span class="quotelev2">&gt;&gt; nodes in the hostfile and dash host options given to an app_context -must-
</span><br>
<span class="quotelev2">&gt;&gt; also be in the default hostfile in order to be available for use by that
</span><br>
<span class="quotelev2">&gt;&gt; app_context - any nodes in the app_context options that are not in the
</span><br>
<span class="quotelev2">&gt;&gt; default hostfile will be ignored.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. in an unmanaged environment, the default hostfile will be used to define
</span><br>
<span class="quotelev2">&gt;&gt; the available node pool. Any hostfile and/or dash host options provided to
</span><br>
<span class="quotelev2">&gt;&gt; an app_context will be used to filter the node pool to define the specific
</span><br>
<span class="quotelev2">&gt;&gt; nodes for use by that app_context, subject to the previous caveat. However,
</span><br>
<span class="quotelev2">&gt;&gt; add-hostfile and add-host options will add nodes to the node pool for use
</span><br>
<span class="quotelev2">&gt;&gt; -only- by the associated app_context.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe this proposed behavior is consistent with that described on the
</span><br>
<span class="quotelev2">&gt;&gt; wiki, and would be relatively easy to implement. If nobody objects, I will
</span><br>
<span class="quotelev2">&gt;&gt; do so by end-of-day 3/6.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Comments, suggestions, objections - all are welcome!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3335.php">Jeff Squyres: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>Previous message:</strong> <a href="3333.php">Shipman, Galen M.: "Re: [OMPI devel] Ticket 1224: disable early completion in v1.2.x series"</a>
<li><strong>In reply to:</strong> <a href="3329.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
