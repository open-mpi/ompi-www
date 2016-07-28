<?
$subject_val = "Re: [OMPI devel] [RFC] Default hostfile MCA param";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 07:51:57 2008" -->
<!-- isoreceived="20080304125157" -->
<!-- sent="Tue, 04 Mar 2008 07:51:57 -0500" -->
<!-- isosent="20080304125157" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Default hostfile MCA param" -->
<!-- id="47CD45ED.6060107_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3F18935.C77E%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 07:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3340.php">Jeff Squyres: "Re: [OMPI devel] Trunk build times?"</a>
<li><strong>In reply to:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have used '^' elsewhere to indicate not, so maybe just have the 
<br>
syntax be if you put '^' at the beginning of a line, that node is not used.
<br>
<p>So we could have:
<br>
n0
<br>
n1
<br>
^headnode
<br>
n3
<br>
<p>I understand the idea of having a flag to indicate that all nodes below 
<br>
a certain point should be ignored, but I think this might get confusing, 
<br>
and I'm unsure how useful it would be. I just see the usefulness of this 
<br>
to block out a couple of nodes by default. Besides, if you do want to 
<br>
block out many nodes, any reasonable text editor allows you to insert 
<br>
'^' in front of any number of lines easily.
<br>
<p>Alternatively, for the particular situation that Edgar mentions, it may 
<br>
be good enough just to set rmaps_base_no_schedule_local in the mca 
<br>
params default file.
<br>
<p>One question though: If I am in a slurm allocation which contains n1, 
<br>
and there is a default hostfile that contains &quot;^n1&quot;, will I run on 'n1'?
<br>
<p>I'm not sure what the answer is, I know we talked about the precedence 
<br>
earlier...
<br>
<p>Tim
<br>
<p>Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; I personally have no objection, but I would ask then that the wiki be
</span><br>
<span class="quotelev1">&gt; modified to cover this case. All I require is that someone define the syntax
</span><br>
<span class="quotelev1">&gt; to be used to indicate &quot;this is a node I do -not- want used&quot;, or
</span><br>
<span class="quotelev1">&gt; alternatively a flag that indicates &quot;all nodes below are -not- to be used&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Implementation isn't too hard once I have that...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/3/08 9:44 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could this mechanism be used also to exclude a node, indicating to never
</span><br>
<span class="quotelev2">&gt;&gt; run a job there? Here is the problem that I face quite often: students
</span><br>
<span class="quotelev2">&gt;&gt; working on the homework forget to allocate a partition  on the cluster,
</span><br>
<span class="quotelev2">&gt;&gt; and just type mpirun. Because of that, all jobs end up running on the
</span><br>
<span class="quotelev2">&gt;&gt; front-end node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we would have now the ability to specify in a default hostfile, to
</span><br>
<span class="quotelev2">&gt;&gt; never run a job on a specified node (e.g. the front end node), users
</span><br>
<span class="quotelev2">&gt;&gt; would get an error message when trying to do that. I am aware that
</span><br>
<span class="quotelev2">&gt;&gt; that's a little ugly...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; THanks
</span><br>
<span class="quotelev2">&gt;&gt; edgar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I forget all the formatting we are supposed to use, so I hope you'll all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just bear with me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George brought up the fact that we used to have an MCA param to specify a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile to use for a job. The hostfile behavior described on the wiki,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, doesn't provide for that option. It associates a hostfile with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific app_context, and provides a detailed hierarchical layout of how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun is to interpret that information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I propose to do is add an MCA param called &quot;OMPI_MCA_default_hostfile&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to replace the deprecated capability. If found, the system's behavior will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. in a managed environment, the default hostfile will be used to filter the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discovered nodes to define the available node pool. Any hostfile and/or dash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host options provided to an app_context will be used to further filter the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node pool to define the specific nodes for use by that app_context. Thus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes in the hostfile and dash host options given to an app_context -must-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also be in the default hostfile in order to be available for use by that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app_context - any nodes in the app_context options that are not in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default hostfile will be ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. in an unmanaged environment, the default hostfile will be used to define
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the available node pool. Any hostfile and/or dash host options provided to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an app_context will be used to filter the node pool to define the specific
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes for use by that app_context, subject to the previous caveat. However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add-hostfile and add-host options will add nodes to the node pool for use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -only- by the associated app_context.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe this proposed behavior is consistent with that described on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wiki, and would be relatively easy to implement. If nobody objects, I will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do so by end-of-day 3/6.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comments, suggestions, objections - all are welcome!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3340.php">Jeff Squyres: "Re: [OMPI devel] Trunk build times?"</a>
<li><strong>In reply to:</strong> <a href="3334.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3342.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Reply:</strong> <a href="3347.php">Edgar Gabriel: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
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
