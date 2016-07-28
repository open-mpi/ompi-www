<?
$subject_val = "Re: [OMPI devel] [RFC] Default hostfile MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 08:40:22 2008" -->
<!-- isoreceived="20080304134022" -->
<!-- sent="Tue, 04 Mar 2008 06:40:12 -0700" -->
<!-- isosent="20080304134012" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Default hostfile MCA param" -->
<!-- id="C3F29F4C.C7B7%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47CD45ED.6060107_at_cs.indiana.edu" -->
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
<strong>Date:</strong> 2008-03-04 08:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3343.php">Jeff Squyres: "[OMPI devel] disabling vt by default"</a>
<li><strong>Previous message:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/4/08 5:51 AM, &quot;Tim Prins&quot; &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We have used '^' elsewhere to indicate not, so maybe just have the
</span><br>
<span class="quotelev1">&gt; syntax be if you put '^' at the beginning of a line, that node is not used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we could have:
</span><br>
<span class="quotelev1">&gt; n0
</span><br>
<span class="quotelev1">&gt; n1
</span><br>
<span class="quotelev1">&gt; ^headnode
</span><br>
<span class="quotelev1">&gt; n3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That works for me and sounds like the right solution.
<br>
<p><span class="quotelev1">&gt; I understand the idea of having a flag to indicate that all nodes below
</span><br>
<span class="quotelev1">&gt; a certain point should be ignored, but I think this might get confusing,
</span><br>
<span class="quotelev1">&gt; and I'm unsure how useful it would be. I just see the usefulness of this
</span><br>
<span class="quotelev1">&gt; to block out a couple of nodes by default. Besides, if you do want to
</span><br>
<span class="quotelev1">&gt; block out many nodes, any reasonable text editor allows you to insert
</span><br>
<span class="quotelev1">&gt; '^' in front of any number of lines easily.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alternatively, for the particular situation that Edgar mentions, it may
</span><br>
<span class="quotelev1">&gt; be good enough just to set rmaps_base_no_schedule_local in the mca
</span><br>
<span class="quotelev1">&gt; params default file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One question though: If I am in a slurm allocation which contains n1,
</span><br>
<span class="quotelev1">&gt; and there is a default hostfile that contains &quot;^n1&quot;, will I run on 'n1'?
</span><br>
<p>According to the precedence rules in the wiki, you would -not- run on n1.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure what the answer is, I know we talked about the precedence
</span><br>
<span class="quotelev1">&gt; earlier...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I personally have no objection, but I would ask then that the wiki be
</span><br>
<span class="quotelev2">&gt;&gt; modified to cover this case. All I require is that someone define the syntax
</span><br>
<span class="quotelev2">&gt;&gt; to be used to indicate &quot;this is a node I do -not- want used&quot;, or
</span><br>
<span class="quotelev2">&gt;&gt; alternatively a flag that indicates &quot;all nodes below are -not- to be used&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Implementation isn't too hard once I have that...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 3/3/08 9:44 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could this mechanism be used also to exclude a node, indicating to never
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run a job there? Here is the problem that I face quite often: students
</span><br>
<span class="quotelev3">&gt;&gt;&gt; working on the homework forget to allocate a partition  on the cluster,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and just type mpirun. Because of that, all jobs end up running on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; front-end node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we would have now the ability to specify in a default hostfile, to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; never run a job on a specified node (e.g. the front end node), users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would get an error message when trying to do that. I am aware that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's a little ugly...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; THanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I forget all the formatting we are supposed to use, so I hope you'll all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just bear with me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George brought up the fact that we used to have an MCA param to specify a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile to use for a job. The hostfile behavior described on the wiki,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; however, doesn't provide for that option. It associates a hostfile with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specific app_context, and provides a detailed hierarchical layout of how
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun is to interpret that information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I propose to do is add an MCA param called &quot;OMPI_MCA_default_hostfile&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to replace the deprecated capability. If found, the system's behavior will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. in a managed environment, the default hostfile will be used to filter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discovered nodes to define the available node pool. Any hostfile and/or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dash
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host options provided to an app_context will be used to further filter the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node pool to define the specific nodes for use by that app_context. Thus,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes in the hostfile and dash host options given to an app_context -must-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also be in the default hostfile in order to be available for use by that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; app_context - any nodes in the app_context options that are not in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default hostfile will be ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. in an unmanaged environment, the default hostfile will be used to define
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the available node pool. Any hostfile and/or dash host options provided to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an app_context will be used to filter the node pool to define the specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes for use by that app_context, subject to the previous caveat. However,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; add-hostfile and add-host options will add nodes to the node pool for use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -only- by the associated app_context.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe this proposed behavior is consistent with that described on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wiki, and would be relatively easy to implement. If nobody objects, I will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do so by end-of-day 3/6.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Comments, suggestions, objections - all are welcome!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="3343.php">Jeff Squyres: "[OMPI devel] disabling vt by default"</a>
<li><strong>Previous message:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>In reply to:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
